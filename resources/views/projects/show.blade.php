@extends('layouts.app')
@section('maintitle')
    Project Details
@endsection
@section('content')
halow


{{-- <div class="shadow w-full bg-grey-light mt-2">
    <div class="bg-orange-300 text-xs leading-none py-1 text-center text-blue-400" 
    
        style="width: {{100*$project->end_date->diffInDays(now()) / $project->end_date->diffInDays($project->start_date)}}%">
        {{100*$project->end_date->diffInDays(now()) / $project->end_date->diffInDays($project->start_date)}}
        %</div>
  </div> --}}
{{$project->title}}
{{$project->start_date}}
{{$project->end_date}}



@endsection