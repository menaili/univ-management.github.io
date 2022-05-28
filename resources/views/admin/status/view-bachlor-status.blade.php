@extends('master.master3')

@section('title', 'requests-status')

@section('title-page', 'Requests Status')


@section('content')


    <div class="page-content-wrapper py-3">
        <div class="container">
            <!-- Element Heading -->
            <div class="element-heading">
                <h6>Timeline</h6>
            </div>
        </div>
        <div class="container">
            <!-- Timeline Content -->
            @foreach ($view as $key => $request)


                <div class="card timeline-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="timeline-text mb-2"><span class="badge mb-2 rounded-pill"> {{$request->bachlor_status_date}} </span> jusqu'à <span class="badge mb-2 rounded-pill"> {{$request->bachlor_valider_date}}</span>
                                <h6> {{$request->bachlor_status_code}}</h6>
                            </div>
                            <div class="timeline-icon mb-2">
                                <svg class="bi bi-shield-lock" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                    <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="mb-2">Votre demande est {{$request->bachlor_status_code}} dans la date {{$request->bachlor_status_date}} est validé à {{$request->bachlor_valider_date}}</p>
                        <div class="timeline-tags"><span class="badge bg-light text-dark">#Université_de_Souk_Ahras</span></div>
                    </div>
                </div>

        @endforeach

        </div>




@endsection
