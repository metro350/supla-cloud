<template>
    <div>
        <transition name="fade-router">
            <whole-screen-message v-if="registeredEmail"
                icon="pe-7s-mail-open-file"
                header-i18n="Check your email box"
                :message="registeredEmail"></whole-screen-message>
        </transition>
        <transition name="fade-router">
            <div v-if="!registeredEmail">
                <register-slider :texts="['register-slide1', 'register-slide2', 'register-slide3']"></register-slider>
                <register-form @registered="registeredEmail = $event"></register-form>
            </div>
        </transition>
    </div>
</template>

<script>
    import RegisterSlider from './register-slider';
    import RegisterForm from './register-form';
    import WholeScreenMessage from "./whole-screen-message";

    export default {
        components: {WholeScreenMessage, RegisterSlider, RegisterForm},
        data() {
            return {
                registeredEmail: ''
            };
        }
    };
</script>
