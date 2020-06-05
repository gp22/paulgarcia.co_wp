<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
	$hero = get_field( 'hero' );
	if( $hero ): ?>

		<section class="hero mb-24">
			<div class="container mx-auto px-6 py-16 flex flex-col items-center justify-between  lg:flex-row lg:pt-32">
				<div class="max-w-lg">
					<h1 class="font-bold font-display mb-2 text-2xl text-white  lg:leading-snug lg:text-5xl xl:text-6xl">
						<?php echo esc_html( $hero['heading'] ); ?>
					</h1>
					<h2 class="text-white opacity-75 mb-10  lg:mb-0">
						<?php echo esc_html( $hero['subhead'] ); ?>
					</h2>
				</div>
				<img
					src="<?php echo esc_url( $hero['image']['url'] ); ?>"
					class="rounded-full mx-auto z-10 shadow-lg  lg:mx-0"
				/>
			</div>

			<svg viewBox="0 0 1366 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero"> <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path> <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path> <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path> </g> <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero"> <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path> </g> </g> </svg>
		</section>

	<?php endif; ?>

	<section class="container mx-auto px-6">
		<div class="max-w-xl mb-24">
			<h3 class="font-bold font-display text-2xl mb-2">
				Most businesses get their website all wrong
			</h3>

			<p class="mb-4">
				They choose their layout and design based on the preferences of someone in the business, and<!-- --> <span class="font-bold">not what their target audience would find appealing.</span> <!-- -->They think about <span class="italic">themselves</span> when making design decisions, and <span class="italic">not their customers.</span></p><p class="mb-4"><span class="italic">I get it.</span> They probably don’t even know they’re doing this.
			</p>

			<blockquote class="bg-blue-100 border-2 border-blue-500 py-5 px-6 mb-4 relative">
				<svg width="26.807" height="23.456" viewBox="0 0 26.807 23.456" class="absolute  quote-left"><path d="M24.294 43.728h-4.188v-3.351a3.354 3.354 0 013.351-3.351h.419a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 0023.875 32h-.419a8.375 8.375 0 00-8.377 8.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515zm-15.079 0H5.026v-3.351a3.354 3.354 0 013.351-3.351H8.8a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 008.8 32h-.423A8.375 8.375 0 000 40.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515z" transform="translate(0 -32)" fill="#e6f0ff"></path></svg>
				<p class="text-blue-600 mb-3 relative">Website design is the main factor for 48% of users when they determine the credibility of a business.</p>
				<cite class="text-blue-400 font-light">— <!-- -->Blue Corona</cite>
			</blockquote>

			<p class="mb-4">
				One of the biggest factors people use to judge the trustworthiness of your website is <span class="font-bold">how it looks</span>, and you have an <span class="font-bold">incredibly short amount of time</span> (a few seconds) to grab their attention.</p><p class="mb-4"><span class="italic">Good design is important</span> — but what’s more important is design that speaks to your audience.</p><p class="mb-4">And not only design that speaks to your audience, but that<!-- --> <span class="font-bold">encourages them to take action.</span></p><p class="mb-4">I can help you create an experience that<!-- --> <span class="font-bold">focuses on your customers</span> and helps you<!-- --> <span class="font-bold">achieve your goals</span>. Together, we’ll analyze who your customers are and use what we learn as a basis for your web experience.
			</p>

			<blockquote class="bg-blue-100 border-2 border-blue-500 py-5 px-6 mb-4 relative">
				<svg width="26.807" height="23.456" viewBox="0 0 26.807 23.456" class="absolute  quote-left"><path d="M24.294 43.728h-4.188v-3.351a3.354 3.354 0 013.351-3.351h.419a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 0023.875 32h-.419a8.375 8.375 0 00-8.377 8.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515zm-15.079 0H5.026v-3.351a3.354 3.354 0 013.351-3.351H8.8a1.254 1.254 0 001.257-1.257v-2.512A1.254 1.254 0 008.8 32h-.423A8.375 8.375 0 000 40.377v12.566a2.514 2.514 0 002.513 2.513h6.7a2.514 2.514 0 002.513-2.513v-6.7a2.514 2.514 0 00-2.511-2.515z" transform="translate(0 -32)" fill="#e6f0ff"></path></svg>
				<p class="text-blue-600 mb-3 relative">72% of users expect companies to have a mobile-ready website design.</p>
				<cite class="text-blue-400 font-light">— <!-- -->Statista</cite>
			</blockquote>

			<p class="mb-6">
				Most people use their phones to browse the web these days. And<!-- --> <span class="font-bold">they expect your site to work well</span> and provide a good experience no matter how they’re viewing it.</p><p class="mb-4">So I'll make sure that all of the details of mobile-friendliness and responsive design are handled.</p><p class="mb-4"><span class="italic">You'll get a polished looking finished product that puts your best foot forward.</span></p><h3 class="font-bold font-display text-2xl mb-2">Already have designs?</h3><p class="mb-4">If you already have designs and just need someone to bring them to life, I can build it for you.</p><p class="mb-4">Need someone who can collaborate with your team?</p><p class="mb-4">I've got you covered.
			</p>

		</div>
	</section>

	<section class="container mx-auto px-6 mb-24">
		<h4 class="italic">What you'll get</h4>
		<div class="md:overflow-hidden">

			<ul class="md:flex md:flex-wrap md:mx-neg">

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 32" fill="none" d="M0 0H24V24H0z"></path><g data-name="Group 22"><g data-name="Group 18"><path data-name="Path 10" d="M6 22v-4H4a2 2 0 01-2-2V4a2 2 0 012-2h16a2 2 0 012 2v12a2 2 0 01-2 2h-8.667zM4 4v12h4v2l2.667-2H20V4z" transform="translate(2 2) translate(-2 -2)" fill="#fafcff"></path></g><g data-name="Group 19"><path data-name="Path 11" d="M7.422 11a4.993 4.993 0 009.156 0z" transform="translate(2 2) translate(5.422 9) translate(-7.422 -11)" fill="#fafcff"></path></g><g data-name="Group 20"><circle data-name="Ellipse 2" cx="1.25" cy="1.25" r="1.25" fill="#fafcff" transform="translate(2 2) translate(5.75 4)"></circle></g><g data-name="Group 21"><circle data-name="Ellipse 3" cx="1.25" cy="1.25" r="1.25" fill="#fafcff" transform="translate(2 2) translate(11.75 4)"></circle></g></g></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Proactive communication</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">You’ll know exactly what’s going on at every step. No more waiting for emails that never arrive.</p>
				</li>

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 26" fill="none" d="M0 0H24V24H0z"></path><g data-name="Group 17" fill="#fafcff" transform="translate(1 1)"><path data-name="Path 8" d="M21 3h-3V1h-2v6h2V5h3v15H3V5h2V3H3a2 2 0 00-2 2v15a2 2 0 002 2h18a2 2 0 002-2V5a2 2 0 00-2-2z" transform="translate(-1 -1)"></path><path data-name="Path 9" d="M8 5h7V3H8V1H6v6h2z" transform="translate(-1 -1)"></path><path data-name="Rectangle 27" transform="translate(4 8)" d="M0 0H4V4H0z"></path><path data-name="Rectangle 28" transform="translate(9 8)" d="M0 0H4V4H0z"></path><path data-name="Rectangle 29" transform="translate(14 8)" d="M0 0H4V4H0z"></path><path data-name="Rectangle 30" transform="translate(4 13)" d="M0 0H4V4H0z"></path><path data-name="Rectangle 31" transform="translate(9 13)" d="M0 0H4V4H0z"></path></g></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Clear deadlines and deliverables</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">My goal is to set clear deliverables, deadlines, and expectations. And meet them!</p>
				</li>

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 25" fill="none" d="M0 0H24V24H0z"></path><path data-name="Path 7" d="M22 5.07a2.979 2.979 0 00-.878-2.121 3.071 3.071 0 00-4.243 0L6.67 13.158a3.938 3.938 0 00-2.519 1.105 4.061 4.061 0 00-1.309 3.564 2.575 2.575 0 01-.923 2.411L.477 21.68a22.806 22.806 0 003.244.32c1.5 0 4.276-.271 6.085-2.08a3.956 3.956 0 001.146-2.561L21.121 7.191A2.976 2.976 0 0022 5.07zM8.393 18.506a6.163 6.163 0 01-3.865 1.464 4.651 4.651 0 00.312-2.241 2.274 2.274 0 012.139-2.637 2 2 0 011.414 3.414zM19.707 5.777l-9.293 9.293a4 4 0 00-.607-.807 3.724 3.724 0 00-.815-.6l9.3-9.3a1.025 1.025 0 011.414 0 1 1 0 010 1.414z" transform="translate(.477 2.099) translate(-.477 -2.099)" fill="#fafcff"></path></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Custom-designed solution</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">I’ll deliver an experience that’s custom-tailored to your business. No cookie-cutter designs.</p>
				</li>

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 33" fill="none" d="M0 0H24V24H0z"></path><g data-name="Group 23" fill="#fafcff"><path data-name="Path 12" d="M12 20H4v-1h8v-2H4V7h12v1h2V4a2 2 0 00-2-2H4a2 2 0 00-2 2v16a2 2 0 002 2h8zM4 4h12v1H4z" transform="translate(2 2) translate(-2 -2)"></path><path data-name="Path 13" d="M20 10h-4a2 2 0 00-2 2v8a2 2 0 002 2h4a2 2 0 002-2v-8a2 2 0 00-2-2zm0 2v5h-4v-5zm-4 8v-1h4v1z" transform="translate(2 2) translate(-2 -2)"></path></g></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Looks good on every device</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">To show your audience they can trust you and that yours is the business they’re looking for.</p>
				</li>

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 34" fill="none" d="M0 0H24V24H0z"></path><path data-name="Path 14" d="M22 3H2a2 2 0 00-2 2v13a2 2 0 002 2h9v2H7v2h10v-2h-4v-2h9a2 2 0 002-2V5a2 2 0 00-2-2zm0 2v10H2V5zM2 18v-1h20v1z" transform="translate(0 3) translate(0 -3)" fill="#fafcff"></path></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Works well on mobile and desktop</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">Give your audience what they expect, and provide a great experience no matter what.</p>
				</li>

				<li class="pb-4 mb-4 rounded-b-lg shadow-md  md:mb-0 lg:w-1/3 md:px-8 md:py-6 md:shadow-none md:w-1/2">
					<div class="bg-blue-200 border-b border-gray-100 flex items-baseline mb-4 px-2 py-4 rounded-t-lg  md:bg-white md:block md:pt-0 md:px-0">
						<span class="h-10 w-10 rounded-full flex items-center justify-center mr-4  gradient  md:mb-4 md:mr-0"><svg width="24" height="24" viewBox="0 0 24 24"><path data-name="Rectangle 35" fill="none" d="M0 0H24V24H0z"></path><path data-name="Path 15" d="M20.754 21.015L20.582 21a4.38 4.38 0 00-.284.016c-.179.013-.451.034-.781.034-2.721 0-4.18-1.334-4.458-4.049H19V15h-4v-2h3.363A4.409 4.409 0 0023 8.636 4.642 4.642 0 0018.363 4a5.063 5.063 0 00-2.271.492 4.606 4.606 0 00-8.184 0A5.067 5.067 0 005.637 4 4.642 4.642 0 001 8.636 4.407 4.407 0 005.637 13H9v2H5v2h3.942c-.278 2.715-1.738 4.049-4.458 4.049-.331 0-.6-.021-.781-.034A5.076 5.076 0 003.418 21l-.172.015A1.5 1.5 0 003.5 24h17a1.5 1.5 0 00.258-2.985zM10 11H5.637A2.44 2.44 0 013 8.636 2.64 2.64 0 015.637 6a2.486 2.486 0 012.01.777 1 1 0 001.757-.5 2.619 2.619 0 015.192 0 1 1 0 001.757.5A2.487 2.487 0 0118.363 6 2.64 2.64 0 0121 8.636 2.44 2.44 0 0118.363 11H14a1 1 0 00-1 1v3h-2v-3a1 1 0 00-1-1zM8.365 22a6.356 6.356 0 002.593-5h2.083a6.34 6.34 0 002.422 4.875c.059.043.119.085.179.125z" transform="translate(1 2) translate(-1 -2)" fill="#fafcff"></path></svg></span>
						<h5 class="font-display  sm:text-xl md:text-2xl md:w-48">Makes a killer first-impression</h5>
					</div>
					<p class="font-light px-3 text-gray-100 text-sm  md:pl-0">Make the most of your visitors first few seconds on your site and convince them to stay.</p>
				</li>

			</ul>
		</div>
	</section>

	<section class="container mx-auto px-6 mb-24">
		<h4 class="italic mb-2">Wonder if we're a good fit to work together?</h4>

		<div class="lg:flex lg:wrap">
			<div class="rounded-lg shadow-md px-12 py-10 mb-4  lg:w-1/2 lg:mr-4 lg:mb-0">
				<h5 class="font-display mb-6 text-lg">I'm the right consultant for you if:</h5>

				<ul class="text-gray-100 text-sm">

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm0 2.323A9.677 9.677 0 1110.323 20 9.672 9.672 0 0120 10.323m6.784 6.3l-1.09-1.1a.581.581 0 00-.821 0l-6.84 6.785-2.893-2.917a.581.581 0 00-.821 0l-1.1 1.09a.581.581 0 000 .821l4.393 4.428a.581.581 0 00.821 0l8.351-8.284a.581.581 0 000-.82z" transform="translate(-8 -8)" fill="#2abd2a"></path></svg>
						You understand that your website is an investment in your business.
					</li>

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm0 2.323A9.677 9.677 0 1110.323 20 9.672 9.672 0 0120 10.323m6.784 6.3l-1.09-1.1a.581.581 0 00-.821 0l-6.84 6.785-2.893-2.917a.581.581 0 00-.821 0l-1.1 1.09a.581.581 0 000 .821l4.393 4.428a.581.581 0 00.821 0l8.351-8.284a.581.581 0 000-.82z" transform="translate(-8 -8)" fill="#2abd2a"></path></svg>
						You want someone who can act independently to solve problems, and can also work with your team.
					</li>

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm0 2.323A9.677 9.677 0 1110.323 20 9.672 9.672 0 0120 10.323m6.784 6.3l-1.09-1.1a.581.581 0 00-.821 0l-6.84 6.785-2.893-2.917a.581.581 0 00-.821 0l-1.1 1.09a.581.581 0 000 .821l4.393 4.428a.581.581 0 00.821 0l8.351-8.284a.581.581 0 000-.82z" transform="translate(-8 -8)" fill="#2abd2a"></path></svg>
						You are comfortable working with someone on a project basis and see the value they provide to your business.
					</li>

					<li class="relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm0 2.323A9.677 9.677 0 1110.323 20 9.672 9.672 0 0120 10.323m6.784 6.3l-1.09-1.1a.581.581 0 00-.821 0l-6.84 6.785-2.893-2.917a.581.581 0 00-.821 0l-1.1 1.09a.581.581 0 000 .821l4.393 4.428a.581.581 0 00.821 0l8.351-8.284a.581.581 0 000-.82z" transform="translate(-8 -8)" fill="#2abd2a"></path></svg>
						You want someone who will work with you like a business partner and isn’t afraid to share a different opinion when appropriate.
					</li>

				</ul>
			</div>

			<div class="rounded-lg shadow-md px-12 py-10  lg:w-1/2">
				<h5 class="font-display mb-6 text-lg">I'm not the right consultant for you if:</h5>

				<ul class="text-gray-100 text-sm">

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm6.3 5.7a8.9 8.9 0 011 11.4L14.9 12.7a8.9 8.9 0 0111.4 1zM13.7 26.3a8.9 8.9 0 01-1-11.4l12.4 12.4a8.9 8.9 0 01-11.4-1z" transform="translate(-8 -8)" fill="#bd422a"></path></svg>
						You see your website and all work associated with it as an expense.
					</li>

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm6.3 5.7a8.9 8.9 0 011 11.4L14.9 12.7a8.9 8.9 0 0111.4 1zM13.7 26.3a8.9 8.9 0 01-1-11.4l12.4 12.4a8.9 8.9 0 01-11.4-1z" transform="translate(-8 -8)" fill="#bd422a"></path></svg>
						You want to hire someone to join your team, give them a schedule, and tell them exactly what to do.
					</li>

					<li class="mb-5 relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm6.3 5.7a8.9 8.9 0 011 11.4L14.9 12.7a8.9 8.9 0 0111.4 1zM13.7 26.3a8.9 8.9 0 01-1-11.4l12.4 12.4a8.9 8.9 0 01-11.4-1z" transform="translate(-8 -8)" fill="#bd422a"></path></svg>
						You want to hire someone for small fixes here and there or are only concerned with price.
					</li>

					<li class="relative">
						<svg width="24" height="24" viewBox="0 0 24 24" class="absolute  list-style"><path d="M20 8a12 12 0 1012 12A12 12 0 0020 8zm6.3 5.7a8.9 8.9 0 011 11.4L14.9 12.7a8.9 8.9 0 0111.4 1zM13.7 26.3a8.9 8.9 0 01-1-11.4l12.4 12.4a8.9 8.9 0 01-11.4-1z" transform="translate(-8 -8)" fill="#bd422a"></path></svg>
						You want someone who will act more like an employee than a valued business partner.
					</li>

				</ul>
			</div>

		</div>
	</section>

	<section class="container mx-auto px-6 mb-20 relative">

		<h3 id="about" class="font-bold font-display text-2xl mb-2">About</h3>

		<p class="mb-4 max-w-xl relative">
			<span class="italic">In case you were wondering...</span> I taught myself web and app development while traveling and working as a “digital nomad” in 2016. I liked it so much, I pivoted away from the business I was working on to pursue it full-time.</p><p class="mb-4 max-w-xl">Since then, I’ve developed websites and apps for Fortune 500 companies in telecom, media, and finance. I’ve also helped build and run marketing campaigns for a major digital marketing agency.</p><p class="mb-4 max-w-xl"><span class="italic">On a more personal note...</span> I like to keep life simple, and free of clutter. Both inner and outer! I love to cook, and health and fitness are major parts of my life. I'm also a big supporter of privacy and freedom. Both online and off.</p><p class="mb-4 max-w-xl">My goal is to help you accomplish your business goals by being a problem solving partner so you can focus on what you do best.</p><p class="max-w-xl">I hope that together we can make something great!
		</p>

	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
