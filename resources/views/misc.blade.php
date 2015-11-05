@extends('master')

@section('menu')
    <div class="menu">
        <p id="validation">
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
				<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fdarkheart.pusku.com%2Findex.html">
					<img style="border:0;width88px;height:31px" src="images/valid-html5.png" alt="Valid HTML5!" />
				</a>
        </p>
		<p>
            <a href="/">HOME</a>
            <a href="me">ME</a>
			<a href="code">PROGRAMMING</a>
			<a href="misc">MISC</a>
			<a href="contact.html">CONTACT</a>
		</p>
	</div>
@endsection

@section('content')
		<div class="container">
				<p>
					Some tutorials are about to be uploaded
				</p>	
		</div>
@endsection

@section('footer')
		<div class="footer">
			<p>Copyleft Thodoris Kouleris 2014</p>
		</div
@endsection