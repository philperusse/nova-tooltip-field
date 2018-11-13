<template>

    <tooltip :value="field.value"></tooltip>

    <!--div v-if="field.asHtml" v-html="field.value"></div>
    <span v-else class="whitespace-no-wrap">{{ field.value }}</span-->
</template>

<script>

import Tooltip from './Tooltip';

export default {
    components : { Tooltip },
    props: ['resourceName', 'field'],
}
</script>


