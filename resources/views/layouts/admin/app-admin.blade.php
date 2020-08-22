<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Gestion école') }}</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->

	<!--begin::Global Theme Styles -->
	<link href="{{ asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="{{ asset('assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->
	<link href="{{ asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/demo/default/base/custom-style.css')}}" rel="stylesheet" type="text/css" />


	<!--RTL version:<link href="{{ asset('assets/demo/default/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->

	<!--end::Global Theme Styles -->

	<!--begin::Page Vendors Styles -->
	<link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
		type="text/css" />

	<!--RTL version:<link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->
	<link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.css')}} " rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
	

	<!--RTL version:<link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

	<!--end::Page Vendors Styles -->
	<link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico')}}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
	class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">

		<!-- BEGIN: Header -->
		<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">

					<!-- BEGIN: Brand -->
					<div class="m-stack__item m-brand  m-brand--skin-dark ">
						<div class="m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<a href="index.html" class="m-brand__logo-wrapper">
									<img alt=""
										src="{{ asset('assets/demo/default/media/img/logo/logo_default_dark.png')}}" />
								</a>
							</div>
							<div class="m-stack__item m-stack__item--middle m-brand__tools">

								<!-- BEGIN: Left Aside Minimize Toggle -->
								<a href="javascript:;" id="m_aside_left_minimize_toggle"
									class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Aside Left Menu Toggler -->
								<a href="javascript:;" id="m_aside_left_offcanvas_toggle"
									class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Header Menu Toggler -->
								<!-- <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a> -->

								<!-- END -->

								<!-- BEGIN: Topbar Toggler -->
								<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
									class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
									<i class="flaticon-more"></i>
								</a>

								<!-- BEGIN: Topbar Toggler -->
							</div>
						</div>
					</div>

					<!-- END: Brand -->
					<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

					</div>
				</div>
			</div>
		</header>

		<!-- END: Header -->

		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
					class="la la-close"></i></button>
			<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

				<!-- BEGIN: Aside Menu -->
				<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
					m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
							<a href="{{ route('admin.dashboard') }}" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> 
									<span class="m-menu__link-wrap"> 
										<span class="m-menu__link-text headingstyle">Tableau de Bord</span>
									</span>
								</span></span>
							</a>
						</li>

						
						<li class="m-menu__section ">
							<h4 class="m-menu__section-text">Paramétrage</h4>
							<i class="m-menu__section-icon flaticon-more-v2"></i>
						</li>

						{{-- Cycle scolaire --}}
						<li id="cycle_scolaire" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
							<a href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-user-ok"></i>
								<span class="m-menu__link-text  menuu">Cycle scolaire</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li id="index_cycle_scolaire" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
									<a href="{{ route('cycle_scolaire.index') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Liste des cycles scolaires</span>
											<i class=""></i>
										</a>
									</li>
									<li id="create_cycle_scolaire" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('cycle_scolaire.create') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Ajouter cycle scolaire</span><i class=""></i>
										</a>
									</li>


								</ul>
							</div>
						</li>


						{{-- Niveau scolaire --}}
						<li id="niveau" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
							<a href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-user-ok"></i>
								<span class="m-menu__link-text  menuu">Niveau scolaire</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li id="index_niveau" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
									<a href="{{ route('niveau_scolaire.index') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Liste des niveaux</span>
											<i class=""></i>
										</a>
									</li>
									<li id="create_niveau" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('niveau_scolaire.create') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Ajouter niveau</span><i class=""></i>
										</a>
									</li>
								</ul>
							</div>
						</li>


						{{-- Niveau scolaire --}}
						<li id="matiere" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
							<a href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-user-ok"></i>
								<span class="m-menu__link-text  menuu">Matière</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li id="index_matiere" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
									<a href="{{ route('matiere.index') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Liste des matières</span>
											<i class=""></i>
										</a>
									</li>
									<li id="create_matiere" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('matiere.create') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Ajouter matière</span><i class=""></i>
										</a>
									</li>
									<li id="import_matiere" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('matiere.import.show') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Importer des matières</span><i class=""></i>
										</a>
									</li>
								</ul>
							</div>
						</li>
					

						{{-- Changer mot de passe --}}

						<li class="m-menu__section ">
							<h4 class="m-menu__section-text">Utilisateur</h4>
							<i class="m-menu__section-icon flaticon-more-v2"></i>
						</li>


						<li id="prof" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
							<a href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-user-ok"></i>
								<span class="m-menu__link-text  menuu">Prof</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu "> 
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li id="index_prof" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('prof.index') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Liste des profs</span>
											<i class=""></i>
										</a>
									</li>
									<li id="index_create" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('prof.create') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Ajouter prof</span>
											<i class=""></i>
										</a>
									</li>

									<li id="import_prof" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="{{ route('prof.import.show') }}" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Importer des profs</span><i class=""></i>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li id="compte" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
							<a href="javascript:;" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-user-ok"></i>
								<span class="m-menu__link-text  menuu">Compte</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu "> 
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li id="change_password" class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
										<a href="" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
											<span class="m-menu__link-text">Changer mot de passe</span>
											<i class=""></i>
										</a>
									</li>
								</ul>
							</div>

						</li>






					</ul>
				</div>

				<!-- END: Aside Menu -->
			</div>

			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">

				@yield('content')

			</div>
		</div>

		<!-- end:: Body -->

		<!-- begin::Footer -->
		<footer class="m-grid__item		m-footer ">
			<div class="m-container m-container--fluid m-container--full-height m-page__container">
				<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
					<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<span class="m-footer__copyright">
							2019 &copy; Solution réaliser par <a href="#" class="m-link">Inkpainter</a>
						</span>
					</div>

				</div>
			</div>
		</footer>

		<!-- end::Footer -->
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Sidebar -->
	<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
		<div class="m-quick-sidebar__content m--hide">
			<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
			<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">

				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs"
						role="tab">Traçabilité</a>
				</li>
			</ul>
			<div class="tab-content">

				<div class="tab-pane active" id="m_quick_sidebar_tabs_logs" role="tabpanel">
					<div class="m-list-timeline m-scrollable">
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								Suivi de l'application
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">Création d'une facture</a>
									<span class="m-list-timeline__time">5 hrs</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">Création d'une facture</a>
									<span class="m-list-timeline__time">6 hrs</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text"> Ajout d'un nouveau client </a>
									<span class="m-list-timeline__time">7 hrs</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">Ajout d'un nouveau produit</a>
									<span class="m-list-timeline__time">7 hrs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end::Quick Sidebar -->

	<!-- begin::Scroll Top -->
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>


	<!--begin::Global Theme Bundle -->
	<script src="{{ asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors -->
	<script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript">
	</script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts -->
	<script src="{{ asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/custom/crud/forms/widgets/bootstrap-timepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js')}} " type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>



	{{-- ckeditor --}}
	<script src="{{ asset('assets/app/js/ckeditor/ckeditor.js') }}"></script>

	<!--end::Page Scripts -->

	@yield('ckeditor')
	@yield('datatable')
	@yield('timepicker')
	@yield('deleteAll')

	<script>
		$.fn.datepicker.dates['fr'] = {
			days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
			daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
			daysMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
			months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
			monthsShort: ["Jan", "Fév", "Mar", "Avr", "Mai", "Jui", "Jui", "Aou", "Sep", "Oct", "Nov", "Dec"],
			today: "Aujourd'hui",
			clear: "Vider",
			format: "dd-mm-yyyy",
			titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
			weekStart: 0
		};
	
		$('.datepicker').datepicker({
			format: 'dd-mm-yyyy',
			language: 'fr',
			autoclose: true,
			
		});
</script>
</body>

<!-- end::Body -->

</html>