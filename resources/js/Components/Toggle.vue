<script setup>
import { ref, watch } from 'vue';

const props = defineProps({ id: String, truthyValue: String, falsyValue: String })
const emit = defineEmits(['toggle'])
const checked = ref(false);

watch(checked, () => {
    emit('toggle', checked.value ? props.truthyValue : props.falsyValue)
});
</script>

<template>
    <div class="toggle">
        <input type="checkbox" :id="id" v-model="checked" />
        <label :for="id">Toggle</label>
    </div>
</template>

<style>
input[type=checkbox] {
    display: none;
}

label {
    cursor: pointer;
    text-indent: -9999px;
    width: 60px;
    height: 30px;
    background-color: #3badbb;
    display: block;
    border-radius: 100px;
    position: relative;
}

label:after {
    content: '';
    position: absolute;
    top: 3px;
    left: 3px;
    width: 24px;
    height: 24px;
    background: #fff;
    border-radius: 24px;
    transition: 0.3s;
}

input:checked+label {
    background-color: #3badbb;
}

input:checked+label:after {
    left: calc(100% - 3px);
    transform: translateX(-100%);
}

label:active:after {
    width: 40px;
}
</style>