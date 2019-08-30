@component('mail::message')
# Introduction

<p>New Admission Query is received on the website. Details are given below.</p>

<p><strong>Name:</strong>{{$query->name}}</p>
<p><strong>Phone:</strong>{{$query->phone}}</p>
<p><strong>email:</strong>{{$query->email}}</p>
<p><strong>Subject:</strong>{{$query->subject}}</p>
<p><strong>Message:</strong>{{$query->query}}</p>


Thanks,<br>
BGIS
@endcomponent
