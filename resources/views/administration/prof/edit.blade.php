@extends('layouts.admin.app-admin')

@section('content')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ route('admin.dashboard') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__item">
                    <a href="{{ route('prof.index') }}" class="m-nav__link">
                        <span class="m-nav__link-text">Prof</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Modifier prof</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">
    @include('shared.errors_succes')
    <div class="row">
        <div class="col-lg-12">
            <form class="m-form m-form--label-align-left- m-form--state-" id="m_form"
                action="{{route('prof.update',$prof->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile"
                    id="main_portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-progress">

                            <!-- here can place a progress bar-->
                        </div>
                        <div class="m-portlet__head-wrapper">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Modifier Prof
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <div class="btn-group">
                                    <button type="submit"
                                        class="btn btn-accent  m-btn m-btn--icon m-btn--wide m-btn--md">
                                        <span>
                                            <i class="la la-check"></i>
                                            <span>Enregistrer</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Form Body -->
                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-xl-12">
                                        <div class="m-form__section m-form__section--first">
                                            
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Nom :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="text" name="nom" value="{{ $prof->nom_prof }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Prénom :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="text" name="prenom" value="{{ $prof->prenom_prof }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Adresse :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <textarea class="form-control m-input" name="adresse" >{{ $prof->adresse_prof }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Téléphone :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="text" name="telephone" value="{{ $prof->telephone_prof }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-2 col-sm-12">* Date naissance :</label>
                                                <div class="col-lg-3 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input name="date_naissance" type="text" class="form-control m-input datepicker" readonly
                                                        value="{{ date('d-m-Y',strtotime($prof->date_naissance_prof)) }}" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Email :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="text" name="email" value="{{ $prof->email_prof }}">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">* Login :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="text" name="username" value="{{ $prof->username }}">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">Mot de passe :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="password" name="password">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-2 col-lg-2 col-form-label">Confirmer mot de passe :</label>
                                                <div class="col-xl-6 col-lg-6">
                                                    <input class="form-control m-input" type="password" name="password_confirmation">
                                                </div>
                                            </div>

                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Portlet-->
        </div>
    </div>
    
</div>



@endsection