<div class="tab-pane active" id="tab_1_1">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled profile-nav">
                <li>
                    <img src="{{ asset('img/avatars/no-avatar.png') }}" class="img-responsive" alt=""/>
                    <a href="{{ Url::to('user/profile')  }}" class="profile-edit">
                    edit </a>
                </li>
                <li>
                    <a href="{{ Url::to('user/profile')  }}">
                    Profil</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-8 profile-info">
                    <h1>{{ Easy\Form\StringHelper::Items([Sentry::getUser()->nume, Sentry::getUser()->prenume]) }}</h1>
                    <p>
                        Cont pe organizatia: {{ Credite\Organizatie::find( Sentry::getUser()->id_organizatie )->denumire  }}
                    </p>
                    <p>
                    <a href="http://www.credite.leed.ro">
                        credite.leed.ro </a>
                    </p>
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-map-marker"></i> Ro, Cluj Napoca
                        </li>
                        <li>
                            <i class="fa fa-calendar"></i> {{ Easy\Form\StringHelper::Items([ Carbon\Carbon::now()->day, Carbon\Carbon::now()->month, Carbon\Carbon::now()->year ],'.')  }}
                        </li>
                        <li>
                            <i class="fa fa-briefcase"></i> Credite
                        </li>
                    </ul>
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
            <div class="tabbable tabbable-custom tabbable-custom-profile">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_11" data-toggle="tab">
                        Latest Customers </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_11">
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <i class="fa fa-briefcase"></i> Link-uri rapide
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="http://www.leed.ro/imobile/public/login">
                                            Imobiliare </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ URL::to('clienti')  }}">
                                            Clienti </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ URL::to('banci')  }}">
                                            Banci </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ URL::to('ofertare')  }}">
                                            Genereaza oferta </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ URL::route('oferte_generate',['id' => 'oferte_generate']) }}">
                                            Oferte generate </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>