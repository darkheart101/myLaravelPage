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
			<a href="contact">CONTACT</a>
		</p>
	</div>
@endsection

@section('content')
		<div class="container">
			<h2>Contact</h2>
			<p>
				If you really wonder how can you contact me then there is something you can do about it. You can add me                 in your skype contact list for a live chat. My skype is <i>thodoris.kouleris</i>. If you are old                       fashion like me there are two emails: <i>kurokokoro@windowslive.com</i> and <i>tkouleris@gmail.com</i>.
			</p>
		</div>
@endsection

@section('footer')
    <div class="footer">
	   <p>Copyleft Thodoris Kouleris 2014</p>
    </div>
@endsection