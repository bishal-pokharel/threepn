<?php

namespace App\Jobs;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEnquiryEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $enquiry;
    protected $subject;
    protected $to;
    protected $cc=[];
    public function __construct(Enquiry $enquiry,$subject,$to,Array $cc)
    {
        $this->enquiry=$enquiry;
        $this->subject=$subject;
        $this->to=$to;
        $this->cc=$cc;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        $enquiry=$this->enquiry;
        $subject=$this->subject;
        $to=$this->to;
        $cc=$this->cc;
        Mail::send('emails.enquiry', ['enquiry'=>$enquiry], function ($message) use($subject,$to,$cc) {
            $message->subject($subject);
            $message->to([$to]);
            if(count($cc)>0)$message->cc($cc);
        });
    }
}
