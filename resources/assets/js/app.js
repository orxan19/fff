
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Plyr = require('plyr');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
const controls = `
	<div class="button" >
		<img src="/images/logo.png" style="width: 124px;margin-top: -5px;" />
	</div>
	<div class="plyr__controls">
    <button type="button" class="plyr__control" data-plyr="restart">
        <svg role="presentation"><use xlink:href="#plyr-restart"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Restart</span>
    </button>
    <button type="button" class="plyr__control" data-plyr="rewind">
        <svg role="presentation"><use xlink:href="#plyr-rewind"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Rewind {seektime} secs</span>
    </button>
    <button type="button" class="plyr__control" aria-pressed="false" aria-label="Play, {title}" data-plyr="play">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-pause"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-play"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Pause</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Play</span>
    </button>
    <button type="button" class="plyr__control" data-plyr="fast-forward">
        <svg role="presentation"><use xlink:href="#plyr-fast-forward"></use></svg>
        <span class="plyr__tooltip" role="tooltip">Forward {seektime} secs</span>
    </button>
    <div class="plyr__progress">
        <input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" aria-label="Seek">
        <progress class="plyr__progress__buffer" min="0" max="100" value="0">% buffered</progress>
        <span role="tooltip" class="plyr__tooltip">00:00</span>
    </div>
    <div class="plyr__time plyr__time--current" aria-label="Current time">00:00</div>
    <div class="plyr__time plyr__time--duration" aria-label="Duration">00:00</div>
    <button type="button" class="plyr__control" aria-pressed="false" aria-label="Mute" data-plyr="mute">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-muted"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-volume"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Unmute</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Mute</span>
    </button>
    <div class="plyr__volume">
        <input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" aria-label="Volume">
    </div>
    <button type="button" class="plyr__control" aria-pressed="true" aria-label="Enable captions" data-plyr="captions">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-captions-on"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-captions-off"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Disable captions</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Enable captions</span>
    </button>
    <button type="button" class="plyr__control" aria-pressed="false" aria-label="Enter fullscreen" data-plyr="fullscreen">
        <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-exit-fullscreen"></use></svg>
        <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-enter-fullscreen"></use></svg>
        <span class="label--pressed plyr__tooltip" role="tooltip">Exit fullscreen</span>
        <span class="label--not-pressed plyr__tooltip" role="tooltip">Enter fullscreen</span>
    </button>
</div>
`;
const player = new Plyr('#playerr', {  controls });



