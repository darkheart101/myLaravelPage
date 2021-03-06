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
			<h2>Welcome to darkheart's home page</h2>
			<img id="profile" alt="Thodoris Kouleris" src="images/darkheart.jpg" />
			<p>
				Hello there!! Welcome to my web site. Yes, this is another boring web site. I made it because I am a                   vain - some people call me - human who has little life out of computers. This page is about stuff that                i like to do. Because this is a personal web site you may read a lot the word I. No, that doesn't mean                  that I am selfish. I really care about humanity and I help my neighbour. Now, if you are bored don't go                on to read the rest of the site, you will be more bored
			</p>
			<p>
				Some people may wonder what tools did I use to make this web site. Ok, I 'm gonna tell you. I used gvim                 editor to write the code for this page. Gvim is a great editor not only for GNU/Linux operating system                 but for windows users too. For the graphics I used the mighty tool called gimp. Gimp is an open source                   tool to manipulate graphics and can be compared to proprietary professional tools.
			</p>
			<p>
				If you cannot view this web site with your browser then try firefox or chrome. Firefox and Chrome are                   open source and a very secure browsers. I check the pages of this site with firefox and chrome so                       firefox and chrome work fine.
			</p>
			<p>
				As you can see I mentioned already the term open source. Open source is a term which is used for                       software that you can get the source code and play with it, modify it, redistribute it. There is an                     other movement by Richard Stallman which is called Free Software. Open source and Free Software are                     alike. The diffrence is on the philosophy. The philosophy of open source is about the quality of the                   software that you use and the Free Software is about the freedome that you may or may not have on the                   software that you use. For further and more detailed knowledge visit the 
                <a href="http://opensource.org/">Open Source</a> and <a href="http://www.fsf.org/">Free Software</a>                   sites.
			</p>
			
		</div>
@endsection

@section('footer')
    <div class="footer">
	   <p>Copyleft Thodoris Kouleris 2014</p>
    </div>
@endsection