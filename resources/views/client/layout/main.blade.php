@include('client.layout.header')

<body data-plugin-cursor-effect>
	<div class="body">
		@include('client.layout.menu')

		<div role="main" class="main">
			@yield('content')
        </div>

    @include('client.layout.footer')