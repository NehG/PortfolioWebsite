@extends('layouts.app')

@section('profile')
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            @include('profile/profile')
        </div>
        <div class="contact-container container-block">
            @include('profile/contact')
        </div>
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            @include('profile/education')
        </div>
        <div <div class="edu-intrest-container">
            @include('profile/additional')
        </div>
    </div>
    <div class="main-wrapper">
        <section class="section summary-section">
            @include('profile/summary')
        </section>
        <hr class="mb-4" />
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
            @include('profile/experiences')
        </section>
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
            @include('profile/projects')
        </section>
        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            @include('profile/skills')
        </section>
    </div>
</div>
<footer class="footer">
@include('profile/footer')
</footer>
@endsection
