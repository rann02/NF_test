<script>
import Form from '../components/Form.vue';
export default {
    components: {
        Form
    }
}
</script>

<template>
    <div class="container">
        <h1>Add New Customers</h1>
        <!-- <h1>Edit CustomersInformations</h1> -->
        <Form class="form" />
    </div>
</template>

<style lang="scss" scoped>
.container {
    h1 {
        text-align: center;
        margin-top: 30px;
    }

    .form {
        margin: 0 auto;
        margin-top: 15px;
        border: solid 1px rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }
}
</style>