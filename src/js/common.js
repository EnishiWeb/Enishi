/*
 * ========================================================
 *
 *  Global Nav
 *
 * ========================================================
 */
const hamburger = document.querySelector('[data-js-hamburger]');
const targets = document.querySelectorAll('[data-js-hamburger-target]');
const overlays = document.querySelectorAll('[data-js-ovl]');
const drawerLinks = document.querySelectorAll('[data-js-nav-drawer] a');
const body = document.body;

if (hamburger) {
	/* ==================================================
	 *  hamburger クリック → トグル
	 * ================================================== */
	hamburger.addEventListener('click', () => {
		const isActive = hamburger.classList.toggle('is-active');

		targets.forEach((target) => {
			target.classList.toggle('is-active', isActive);
		});

		overlays.forEach((ovl) => {
			ovl.classList.toggle('is-active', isActive);
		});

		/* ==================================================
		 *  body スクロール制御
		 * ================================================== */
		body.style.overflow = isActive ? 'hidden' : '';
	});

	/* ==================================================
	 *  is-active を全部外す処理
	 * ================================================== */
	const removeActive = () => {
		hamburger.classList.remove('is-active');

		targets.forEach((target) => {
			target.classList.remove('is-active');
		});

		overlays.forEach((ovl) => {
			ovl.classList.remove('is-active');
		});

		/* ==================================================
		 *  body スクロール復活
		 * ================================================== */
		body.style.overflow = '';
	};

	/* ==================================================
	 *  nav-drawer 内の a タグ
	 * ================================================== */
	drawerLinks.forEach((link) => {
		link.addEventListener('click', removeActive);
	});

	/* ==================================================
	 *  overlay クリック
	 * ================================================== */
	overlays.forEach((ovl) => {
		ovl.addEventListener('click', removeActive);
	});
}

/*
 * ========================================================
 *
 *  Modal
 *
 * ========================================================
 */
document.addEventListener('click', (e) => {
	/* ==================================================
	 *  Open
	 * ================================================== */

	const openBtn = e.target.closest('[data-js-modal-open]');
	if (openBtn) {
		e.preventDefault();

		const key = openBtn.dataset.target;
		const modal = document.querySelector(`[data-js-modal][data-key="${key}"]`);
		if (!modal) return;

		modal.classList.add('is-active');
		return;
	}

	/* ==================================================
	 *  Close (button)
	 * ================================================== */

	const closeBtn = e.target.closest('[data-js-modal-close]');
	if (closeBtn) {
		e.preventDefault();
		closeBtn.closest('[data-js-modal]')?.classList.remove('is-active');
		return;
	}

	/* ==================================================
	 *  Close on outside click
	 * ================================================== */

	const activeModal = document.querySelector('[data-js-modal].is-active');
	if (!activeModal) return;

	const inner = e.target.closest('.c-modal-default__inner');
	if (!inner && activeModal.contains(e.target)) {
		activeModal.classList.remove('is-active');
	}
});

/* ==================================================
 *  Optional: Escで閉じる
 * ================================================== */

document.addEventListener('keydown', (e) => {
	if (e.key !== 'Escape') return;
	document
		.querySelector('[data-js-modal].is-active')
		?.classList.remove('is-active');
});

const buttons = document.querySelectorAll('[data-strengths-btn]');
const slides = document.querySelectorAll('[data-strengths-slide]');

const changeSlide = (index) => {
	slides.forEach((slide) => {
		slide.classList.remove('is-active');
	});

	buttons.forEach((button) => {
		button.classList.remove('is-active');
	});

	slides[index].classList.add('is-active');
	buttons[index].classList.add('is-active');
};

/*
 * ========================================================
 *
 *  ボタンとスライド連動
 *
 * ========================================================
 */

document.addEventListener('DOMContentLoaded', () => {
	const buttonList = document.querySelector('.p-top-strengths__list-btn');

	const buttons = document.querySelectorAll('[data-js-strengths-btn]');

	const slides = document.querySelectorAll('[data-js-strengths-slide]');

	const accordions = document.querySelectorAll('[data-js-strengths-accordion]');

	if (!buttonList || !buttons.length) return;

	const mediaQuery = window.matchMedia('(max-width: 960px)');

	/* ==================================================
	 *  PC
	 * ================================================== */

	const changeSlide = (index) => {
		buttons.forEach((button) => {
			button.classList.remove('is-active');
		});

		slides.forEach((slide) => {
			slide.classList.remove('is-active');
		});

		const activeButton = document.querySelector(
			`[data-js-strengths-btn][data-strengths-index="${index}"]`
		);

		const activeSlide = document.querySelector(
			`[data-js-strengths-slide][data-strengths-index="${index}"]`
		);

		activeButton?.classList.add('is-active');
		activeSlide?.classList.add('is-active');
	};

	/* ==================================================
	 *  SP / Tablet
	 * ================================================== */

	const toggleAccordion = (index) => {
		const activeButton = document.querySelector(
			`[data-js-strengths-btn][data-strengths-index="${index}"]`
		);

		const activeAccordion = document.querySelector(
			`[data-js-strengths-accordion][data-strengths-index="${index}"]`
		);

		if (!activeButton || !activeAccordion) return;

		const isOpen = activeAccordion.classList.contains('is-active');

		accordions.forEach((accordion) => {
			accordion.classList.remove('is-active');
		});

		buttons.forEach((button) => {
			button.classList.remove('is-active');
			button.setAttribute('aria-expanded', 'false');
		});

		if (!isOpen) {
			activeAccordion.classList.add('is-active');
			activeButton.classList.add('is-active');
			activeButton.setAttribute('aria-expanded', 'true');
		}
	};

	/* ==================================================
	 *  Event
	 * ================================================== */

	buttons.forEach((button) => {
		const index = button.dataset.strengthsIndex;

		button.addEventListener('mouseenter', () => {
			if (mediaQuery.matches) return;

			changeSlide(index);
		});

		button.addEventListener('click', () => {
			if (mediaQuery.matches) {
				toggleAccordion(index);
				return;
			}

			changeSlide(index);
		});
	});

	buttonList.addEventListener('mouseleave', () => {
		if (mediaQuery.matches) return;

		changeSlide('0');
	});
});

/*
 * ========================================================
 *
 *  タイピングの文字数取得
 *
 * ========================================================
 */
const typingElements = document.querySelectorAll('[data-js-typing]');

typingElements.forEach((element) => {
	const length = element.textContent.trim().length;

	element.style.setProperty('--length', length);
	element.classList.add('is-active');
});

/*
 * ========================================================
 *
 *  Background Geometric Animation
 *
 * ========================================================
 */

const initBackgroundGeometric = () => {
	const canvases = document.querySelectorAll('[data-js-bg-deco]');

	if (!canvases.length) return;

	const shapes = ['square', 'line', 'triangle', 'dot'];

	const random = (min, max) => {
		return Math.random() * (max - min) + min;
	};

	canvases.forEach((canvas) => {
		const context = canvas.getContext('2d');

		if (!context) return;

		/* ==================================================
		 *  Color
		 * ================================================== */

		const colorType = canvas.dataset.bgDecoColor;

		const colors =
			colorType === 'white'
				? ['255, 255, 255', '240, 248, 250', '220, 238, 242', '255, 255, 255']
				: ['17, 55, 67', '31, 78, 91', '78, 143, 163', '183, 218, 226'];

		/* ==================================================
		 *  Settings
		 * ================================================== */

		const particleCount = 20;

		const resizeCanvas = () => {
			const rect = canvas.getBoundingClientRect();

			canvas.width = rect.width;
			canvas.height = rect.height;
		};

		resizeCanvas();

		/* ==================================================
		 *  Particle
		 * ================================================== */

		class GeometricParticle {
			constructor() {
				this.reset();
			}

			reset() {
				this.type = shapes[Math.floor(Math.random() * shapes.length)];

				this.color = colors[Math.floor(Math.random() * colors.length)];

				this.size = random(25, 70);

				this.x = random(0, canvas.width);
				this.y = random(-50, canvas.height);

				this.vx = random(-0.25, 0.25);
				this.vy = random(0.15, 0.5);

				this.rotation = random(0, Math.PI * 2);
				this.rotationSpeed = random(-0.003, 0.003);

				this.opacity = random(0.12, 0.3);
			}

			update() {
				this.x += this.vx;
				this.y += this.vy;
				this.rotation += this.rotationSpeed;

				if (this.y > canvas.height + 50) {
					this.reset();
					this.y = -50;
				}

				if (this.x < -50) {
					this.x = canvas.width + 50;
				}

				if (this.x > canvas.width + 50) {
					this.x = -50;
				}
			}

			draw() {
				context.save();

				context.translate(this.x, this.y);
				context.rotate(this.rotation);

				context.strokeStyle = `rgba(${this.color}, ${this.opacity})`;

				context.fillStyle = `rgba(${this.color}, ${this.opacity})`;

				context.lineWidth = 1;

				switch (this.type) {
					case 'square':
						context.strokeRect(
							-this.size / 2,
							-this.size / 2,
							this.size,
							this.size
						);
						break;

					case 'line':
						context.beginPath();

						context.moveTo(-this.size, 0);
						context.lineTo(this.size, 0);

						context.stroke();
						break;

					case 'triangle':
						context.beginPath();

						context.moveTo(0, -this.size);
						context.lineTo(this.size, this.size);
						context.lineTo(-this.size, this.size);

						context.closePath();
						context.stroke();
						break;

					case 'dot':
						context.beginPath();

						context.arc(0, 0, this.size / 4, 0, Math.PI * 2);

						context.fill();
						break;
				}

				context.restore();
			}
		}

		/* ==================================================
		 *  Create
		 * ================================================== */

		const particles = Array.from(
			{ length: particleCount },
			() => new GeometricParticle()
		);

		/* ==================================================
		 *  Animation
		 * ================================================== */

		const animate = () => {
			context.clearRect(0, 0, canvas.width, canvas.height);

			particles.forEach((particle) => {
				particle.update();
				particle.draw();
			});

			requestAnimationFrame(animate);
		};

		animate();

		window.addEventListener('resize', resizeCanvas);
	});
};

initBackgroundGeometric();

/*
 * ========================================================
 *
 *  Header Background Change
 *
 * ========================================================
 */

const initHeaderBgChange = () => {
	const header = document.querySelector('[data-js-header]');
	const bgChangeArea = document.querySelector('[data-js-bg-change]');

	if (!header || !bgChangeArea) return;

	const checkHeaderPosition = () => {
		const headerRect = header.getBoundingClientRect();
		const bgRect = bgChangeArea.getBoundingClientRect();

		const isInside =
			headerRect.bottom > bgRect.top && headerRect.top < bgRect.bottom;

		header.classList.toggle('is-change', isInside);
	};

	window.addEventListener('scroll', checkHeaderPosition);
	window.addEventListener('resize', checkHeaderPosition);

	checkHeaderPosition();
};

initHeaderBgChange();
