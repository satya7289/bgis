@component('mail::message')
# Introduction

<p>New Contact Form Query is received on the website. Details are given below.</p>

<p><strong>Name:</strong>  {{$contact->name}}</p>
<p><strong>Phone:</strong>  {{$contact->phone}}</p>
<p><strong>email:</strong>  {{$contact->email}}</p>
<p><strong>Subject:</strong>  {{$contact->subject}}</p>
<p><strong>Message:</strong>  {{$contact->message}}</p>


Thanks,<br>
BGIS
@endcomponent
