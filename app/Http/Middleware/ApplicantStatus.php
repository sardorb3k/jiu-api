<?php

namespace App\Http\Middleware;

use App\Models\EnrollmentExamday;
use App\Models\Enrollments;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicantStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // $user = auth()->user();
        // $enrollment = Enrollments::where('user_id', $user->id)->orderBy('created_at', 'DESC')->first();
        // $examday = EnrollmentStatus::where('user_id', $user->id)->orderBy('created_at', 'DESC')->first();

        // if(!$enrollment) {
        //     redirect()->route('applicant.checkstatus');
        // }
        // if(!$examday) {
        //     redirect()->route('applicant.checkstatus');
        // }
        // if($enrollment && $examday) {
        //     redirect()->route('applicant.checkstatus');
        // } 
        // dd()
        return $next($request);
    }
}
