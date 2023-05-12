<link rel="stylesheet" href="styles/navbar.css">
<header>
	<nav id="nav-bar">
		<div class="nav-items">
			<div id="subjects-menu" class="nav-item-container">
				<button id="subjects-button" class="nav-item-container">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" id="school-icon">
						<path
							d="m12 21-7-3.8v-6L1 9l11-6 11 6v8h-2v-6.9l-2 1.1v6Zm0-8.3L18.85 9 12 5.3 5.15 9Zm0 6.025 5-2.7V12.25L12 15l-5-2.75v3.775Zm0-6.025Zm0 2.25Zm0 0Z" />
					</svg>
					<p id="subject-title">Subjects</p>
				</button>
				<div id="subjects-list">
					<div class="list-block">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="list-icon">
							<path
								d="m5 15.95 6 3.475v-6.85L5 9.1Zm8 3.475 6-3.475V9.1l-6 3.475Zm-6.925-12L12 10.85l5.925-3.425L12 4ZM3 17.125v-9.1q0-.55.263-1 .262-.45.737-.725l7-4.025Q11.475 2 12 2t1 .275L20 6.3q.475.275.738.725.262.45.262 1v7.95q0 .55-.262 1-.263.45-.738.725l-7 4.025Q12.525 22 12 22t-1-.275ZM12 12Z" />
						</svg>
						<a href="pages/coding.php" class="list-link">Coding</a>
					</div>
					<div class="list-block">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="list-icon">
							<path d="M6 20v-2l6.5-6L6 6V4h12v3h-7.225l5.375 5-5.375 5H18v3Z" />
						</svg>
						<a href="" class="list-link">Math</a>
					</div>
					<div class="list-block">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="list-icon">
							<path
								d="M1.05 21v-2.8q0-.825.425-1.55.425-.725 1.175-1.1 1.275-.65 2.875-1.1Q7.125 14 9.05 14q1.925 0 3.525.45 1.6.45 2.875 1.1.75.375 1.175 1.1.425.725.425 1.55V21Zm2-2h12v-.8q0-.275-.137-.5-.138-.225-.363-.35-.9-.45-2.312-.9Q10.825 16 9.05 16q-1.775 0-3.187.45-1.413.45-2.313.9-.225.125-.362.35-.138.225-.138.5Zm6-6q-1.65 0-2.825-1.175Q5.05 10.65 5.05 9H4.8q-.225 0-.362-.137Q4.3 8.725 4.3 8.5q0-.225.138-.363Q4.575 8 4.8 8h.25q0-1.125.55-2.025.55-.9 1.45-1.425v.95q0 .225.138.362Q7.325 6 7.55 6q.225 0 .363-.138.137-.137.137-.362V4.15q.225-.075.475-.113Q8.775 4 9.05 4t.525.037q.25.038.475.113V5.5q0 .225.138.362.137.138.362.138.225 0 .363-.138.137-.137.137-.362v-.95q.9.525 1.45 1.425.55.9.55 2.025h.25q.225 0 .363.137.137.138.137.363 0 .225-.137.363Q13.525 9 13.3 9h-.25q0 1.65-1.175 2.825Q10.7 13 9.05 13Zm0-2q.825 0 1.413-.588.587-.587.587-1.412h-4q0 .825.588 1.412Q8.225 11 9.05 11Zm7.5 4-.15-.75q-.15-.05-.287-.113-.138-.062-.263-.187l-.7.25-.5-.9.55-.5v-.6l-.55-.5.5-.9.7.25q.1-.1.25-.175.15-.075.3-.125l.15-.75h1l.15.75q.15.05.3.125t.25.175l.7-.25.5.9-.55.5v.6l.55.5-.5.9-.7-.25q-.125.125-.262.187-.138.063-.288.113l-.15.75Zm.5-1.75q.3 0 .525-.225.225-.225.225-.525 0-.3-.225-.525-.225-.225-.525-.225-.3 0-.525.225-.225.225-.225.525 0 .3.225.525.225.225.525.225Zm1.8-3.25-.2-1.05q-.225-.075-.412-.188-.188-.112-.338-.262l-1.05.35-.7-1.2.85-.75q-.05-.125-.05-.2v-.4q0-.075.05-.2l-.85-.75.7-1.2 1.05.35q.15-.15.338-.263.187-.112.412-.187l.2-1.05h1.4l.2 1.05q.225.075.413.187.187.113.337.263l1.05-.35.7 1.2-.85.75q.05.125.05.2v.4q0 .075-.05.2l.85.75-.7 1.2-1.05-.35q-.15.15-.337.262-.188.113-.413.188l-.2 1.05Zm.7-2.25q.525 0 .888-.363.362-.362.362-.887t-.362-.888q-.363-.362-.888-.362t-.887.362q-.363.363-.363.888t.363.887q.362.363.887.363ZM3.05 19h12-12Z" />
						</svg>
						<a href="" class="list-link">Engineering</a>
					</div>
				</div>
			</div>
			<div class="nav-item-container" id="brand-container">
				<a href="index.html">
					<p id="brand">Master<span id="brand-accent">It!</span></p>
				</a>
			</div>
			<div class="nav-item-container" id="hidden-brand-container">
				<button id="menu-btn">
					<p id="brand">Master<span id="brand-accent">It!</span></p>
				</button>
				<div class="nav-item-container" id="hidden-menu">
					<div id="hidden-profile-menu">
						<a id="hidden-profile-button" href="index.html">
							<p class="menu-option">Home</p>
						</a>
						<button type="button" id="hidden-profile-button">
							<p class="menu-option">Settings</p>
						</button>
						<div id="hidden-profile-list">
							<div class="list-block">
								<a href="pages/feedback.html" class="list-link">Feedback</a>
							</div>
							<div class="list-block" onclick="toggle_darkmode()">
								<a class="list-link">Darkmode</a>
							</div>
						</div>
					</div>
					<div id="hidden-subjects-menu">
						<button id="hidden-subjects-button" class="nav-item-container">
							<p class="menu-option">Subjects</p>
						</button>
						<div id="hidden-subjects-list">
							<div class="list-block">
								<a href="pages/coding.php" class="list-link">Coding</a>
							</div>
							<div class="list-block">
								<a href="" class="list-link">Math</a>
							</div>
							<div class="list-block">
								<a href="" class="list-link">Engineering</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="profile-menu" class="nav-item-container">
				<button type="button" id="profile-button">
					<img src="assets/appa.jpg" alt="" class="avatar">
					<span id='username'></span>
				</button>
				<div id="profile-list">
					<div class="list-block">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="list-icon">
							<path
								d="M10.5 14H18v-2h-5.5ZM6 14h2.45l5.9-5.85q.15-.15.15-.375t-.15-.375L12.6 5.65q-.15-.15-.375-.15t-.375.15L6 11.55Zm-4 8V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v12q0 .825-.587 1.413Q20.825 18 20 18H6Zm2-4.825L5.175 16H20V4H4ZM4 4v13.175Z" />
						</svg>
						<a href="pages/feedback.html" class="list-link">Feedback</a>
					</div>
					<button class="list-block" onclick="toggle_darkmode()">
						<svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="list-icon">
							<path
								d="M12 21q-3.75 0-6.375-2.625T3 12q0-3.75 2.625-6.375T12 3q.35 0 .688.025.337.025.662.075-1.025.725-1.637 1.887Q11.1 6.15 11.1 7.5q0 2.25 1.575 3.825Q14.25 12.9 16.5 12.9q1.375 0 2.525-.613 1.15-.612 1.875-1.637.05.325.075.662Q21 11.65 21 12q0 3.75-2.625 6.375T12 21Zm0-2q2.2 0 3.95-1.212 1.75-1.213 2.55-3.163-.5.125-1 .2-.5.075-1 .075-3.075 0-5.238-2.162Q9.1 10.575 9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.162 2.55Q5 9.8 5 12q0 2.9 2.05 4.95Q9.1 19 12 19Zm-.25-6.75Z" />
						</svg>
						<a class="list-link">Darkmode</a>
					</button>
				</div>
			</div>
	</nav>
</header>
<script>
let user = window.sessionStorage.getItem('username');
console.log(user);
if (user !== null) {
	document.getElementById('username').innerText = user;
}

</script>
<script src="scripts/darkmode.js"></script>
<script src="scripts/mobile_menu.js"></script>
