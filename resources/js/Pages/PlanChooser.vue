<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import PlanCard from '@/Components/PlanCard.vue';
import Toggle from '@/Components/Toggle.vue';
import { ref } from 'vue';

const props = defineProps({ plans: Array, billingCycles: Array });


const activePlanId = ref(null);
function onPlanChoose(planId) {
    activePlanId.value = planId;
}

const activeBillingCycle = ref(props.billingCycles.find(billingCycle => billingCycle.active))
function onBillingCycleChoose(billingCycleName) {
    const billingCycle = props.billingCycles.find((billingCycle) => billingCycle.name === billingCycleName);

    if (billingCycle) {
        activeBillingCycle.value = billingCycle;
    }
}
</script>

<template>

    <Head title="Ready to get started?" />

    <section class="plan-chooser container-fluid">
        <h1>
            Ready to <span class="get-started">get started?</span>
        </h1>

        <p>Choose a plan tailored to your needs</p>

        <div class="billing-cycle-switch">
            <div class="billing-cycle">Monthly</div>
            <Toggle id="billing-cycle-toggle" @toggle="onBillingCycleChoose" truthy-value="yearly"
                falsy-value="monthly" />
            <div class="billing-cycle">
                <div class="discount">20% Off</div>
                Yearly
            </div>
        </div>

        <ul class="plan-card-list container">
            <li v-for="plan in plans" :key="plan.id" class="item">
                <PlanCard :plan="plan" :active="plan.id === activePlanId" :billing-cycle="activeBillingCycle"
                    @plan-choose="onPlanChoose" />
            </li>
        </ul>
    </section>
</template>
