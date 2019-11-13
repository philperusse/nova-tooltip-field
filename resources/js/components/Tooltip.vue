<template>

    <span
        class="cursor-pointer text-70 hover:text-primary mr-3"
        ref="tooltip"
        v-if="value">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="fill-current"
             width="22" height="18"
             viewBox="0 0 22 22"
             :aria-labelledby="type"
             role="presentation"
        >
            <path  d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </svg>
    </span>
</template>

<script>
    import Tooltip from 'tooltip.js';

    export default {

        data: () => ({ tooltip : null }),

        props: ['value'],

        mounted() {

            this.tooltip = new Tooltip(this.$refs.tooltip, {
                html: true,
                title: this.value,
                trigger: "hover",
            })
        }

    }
</script>

