<div class="stat">
    <p class="stat-heading">Status</p>
    <div class="stat-answer">
        <p>Open to opportunities</p>
    </div>
</div>
<div class="stat">
    <p class="stat-heading">Front-End</p>
    <div class="stat-answer">
        <p>UI/UX, Functionality, Design, Copywriting</p>
    </div>
</div>
<div class="stat">
    <p class="stat-heading">Back-End</p>
    <div class="stat-answer">
        <p>API, Data Structure, Performance, Site Architecture</p>
    </div>
</div>
<div class="stat">
    <p class="stat-heading">Experience</p>
    <div class="stat-answer">
        @php
            $today = \Carbon\Carbon::today('Asia/Taipei');
            $numberOfYears = $today->diffInYears('2020-12-13');
            $numberOfDays = $today->diffInDays('2020-12-13');
            if ($numberOfYears >= 1) {
                $numberOfDays = $numberOfDays - ($numberOfYears * 365);
            }
            if ($numberOfYears === 1) {
                $yearsText = 'year';
            } else {
                $yearsText = 'years';
            }
        @endphp 
        <p>{{$numberOfYears}} {{$yearsText}} {{$numberOfDays}} days</p>
        
    </div>
</div>
<div class="stat">
    <p class="stat-heading">Interested In</p>
    <div class="stat-answer">
        <p>
            Remote Office Both
        </p>
    </div>
</div>
<div class="stat">
    <p class="stat-heading">Technologies</p>
    <x-techstack></x-techstack>
</div>