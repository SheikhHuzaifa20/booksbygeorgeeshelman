<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\schedule;
use App\Models\Newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Page;
use Image;

class HomeController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // use Helper;

    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::select('img_path')
            ->where('table_name', '=', 'logo')
            ->first();

        $favicon = imagetable::select('img_path')
            ->where('table_name', '=', 'favicon')
            ->first();

        View()->share('logo', $logo);
        View()->share('favicon', $favicon);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = DB::table('banners')->where('status', 1)->where('id', 1)->first();
        $page = DB::table('pages')->where('id', 1)->first();
        $section = DB::table('sections')->where('page_id', 1)->get();
        $testimonial = DB::table('testimonial')->where('status', 1)->where('sort_order', 'asc')->get();

        return view('welcome', compact('banner', 'page', 'section' , 'testimonial'));
    }

    // ============= George T. Eshelman Website Pages =============

    public function aboutAuthor()
    {
        $page = DB::table('pages')->where('id', 2)->first();

        return view('about-author', compact('page'));
    }

    public function aboutBook()
    {
        $page = DB::table('pages')->where('id', 3)->first();
        $section = DB::table('sections')->where('page_id', 3)->get();


        return view('about-book' , compact('page', 'section'));
    }

    public function contact()
    {
        $page = DB::table('pages')->where('id', 4)->first();

        return view('contact' , compact('page'));
    }
    // =============================================================




    public function careerSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:5000',
        ]);

        Inquiry::create([
            'form_name' => 'Website Contact',
            'fname' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'notes' => $data['message'] ?? null,
        ]);

        $adminBody = "A new website contact form was submitted.\n\nName: {$data['name']}\nEmail: {$data['email']}\nPhone: " . ($data['phone'] ?? 'Not provided') . "\nMessage: " . ($data['message'] ?? 'Not provided');
        $userBody = "Hello {$data['name']},\n\nThank you for contacting George T. Eshelman. Your message has been received, and we will get back to you as soon as possible.";
        $emailsSent = $this->sendSubmissionEmails($data['email'], 'New website contact submission', $adminBody, $userBody);

        return response()->json([
            'status' => true,
            'emails_sent' => $emailsSent,
            'message' => $emailsSent
                ? 'Thank you. Your message has been received.'
                : 'Your message was saved, but email notifications could not be sent right now. Please try again later.',
        ]);
    }

    public function newsletterSubmit(Request $request)
    {
        $data = $request->validate([
            'newsletter_email' => 'required|email|max:255',
        ]);

        if (Newsletter::where('newsletter_email', $data['newsletter_email'])->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'This email is already subscribed to the newsletter.',
            ], 409);
        }

        Newsletter::create(['newsletter_email' => $data['newsletter_email']]);

        $adminBody = "A new newsletter subscription was submitted.\n\nEmail: {$data['newsletter_email']}";
        $userBody = "Thank you for subscribing to the George T. Eshelman newsletter. Your email has been added to our mailing list.";
        $emailsSent = $this->sendSubmissionEmails($data['newsletter_email'], 'New newsletter subscription', $adminBody, $userBody);

        return response()->json([
            'status' => true,
            'emails_sent' => $emailsSent,
            'message' => $emailsSent
                ? 'Thank you. You are subscribed to the newsletter.'
                : 'Your subscription was saved, but email notifications could not be sent right now. Please try again later.',
        ]);
    }

    private function sendSubmissionEmails(string $userEmail, string $subject, string $adminBody, string $userBody): bool
    {
        $sent = true;

        foreach ([
            ['email' => 'info@booksbygeorgeeshelman.com', 'subject' => $subject, 'body' => $adminBody, 'type' => 'admin'],
            ['email' => $userEmail, 'subject' => 'We received your submission', 'body' => $userBody, 'type' => 'user'],
        ] as $email) {
            try {
                Mail::raw($email['body'], function ($message) use ($email) {
                    $message->to($email['email'])->subject($email['subject']);
                });
            } catch (\Throwable $exception) {
                $sent = false;
                Log::error('Submission email could not be sent.', [
                    'recipient_type' => $email['type'],
                    'exception_type' => get_class($exception),
                    'reason' => $exception->getMessage(),
                ]);
            }
        }

        return $sent;
    }

    public function updateContent(Request $request)
    {
        $id = $request->input('id');
        $keyword = $request->input('keyword');
        $htmlContent = $request->input('htmlContent');
        if ($keyword == 'page') {
            $update = DB::table('pages')
                ->where('id', $id)
                ->update(array('content' => $htmlContent));

            if ($update) {
                return response()->json(['message' => 'Content Updated Successfully', 'status' => true]);
            } else {
                return response()->json(['message' => 'Error Occurred', 'status' => false]);
            }
        } else if ($keyword == 'section') {
            $update = DB::table('section')
                ->where('id', $id)
                ->update(array('value' => $htmlContent));
            if ($update) {
                return response()->json(['message' => 'Content Updated Successfully', 'status' => true]);
            } else {
                return response()->json(['message' => 'Error Occurred', 'status' => false]);
            }
        }
    }
}
