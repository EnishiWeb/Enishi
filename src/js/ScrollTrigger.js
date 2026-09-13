// ScrollTrigger
const initScrollTriggers = () => {
	gsap.registerPlugin(ScrollTrigger);

	ScrollTrigger.batch('[data-js-animate-once]', {
		start: 'top 60%',
		once: true,
		onEnter: (batch) => {
			batch.forEach((el) => el.classList.add('is-animated'));
		},
	});
};

/* ==================================================
 *  画像やフォントでレイアウトが固まる前に作るとズレやすいので、
 *  描画が落ち着いてから初期化する
 * ================================================== */

window.addEventListener('load', () => {
	requestAnimationFrame(initScrollTriggers);
});
