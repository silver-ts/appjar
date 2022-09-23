<script setup>
import { computed } from '@vue/reactivity';

const props = defineProps({ plan: Object, active: Boolean, billingCycle: Object })
const formatter = new Intl.NumberFormat('en-US', { style: 'currency', currency: props.plan.currency, maximumFractionDigits: 0 })
const amountInCurrency = computed(() => formatter.format(props.plan.amount * props.billingCycle.billing_interval * (100 - props.billingCycle.discount) / 100))
</script>

<template>
    <div class="plan-card" :class="{active}" @click="$emit('plan-choose', plan.id)">
        <div class="body">
            <h2 class="name">
                <img :src="plan.icon" />
                {{ plan.name }}
            </h2>
            <span class="popular" v-if="plan.popular">Popular</span>

            <p class="description">{{ plan.description }}</p>
            <div class="price">
                <span class="amount">{{ amountInCurrency }}</span>
                per seat/{{ billingCycle.name.slice(0, -2) }}
            </div>

            <a href="" class="action-btn">{{ plan.action_btn_label }}</a>

            <p class="features-summary">{{ plan.features_summary }}</p>
            <ul class="feature-list">
                <li class="item" v-for="feature in plan.features" :key="feature.id">
                    {{ feature.title }}
                    <span class="beta" v-if="feature.beta">Beta</span>
                </li>
            </ul>
        </div>
        <div class="footer">
            <a href="" class="see-all-features">
                See all features
            </a>
        </div>
    </div>
</template>