<script >

import { RouterLink } from 'vue-router';
export default {
    components: { RouterLink }
}
</script>
<template>
    <nav class="navbar-cover">
        <div class="content">
            <RouterLink to='/' class="navlink linkactive">
                Home
            </RouterLink>
            <div>
                <RouterLink to="/add" class="navlink">
                    Add Product
                </RouterLink>
                <router-link to="/array" class="navlink">
                    Array
                </router-link>
            </div>

        </div>
    </nav>
</template>

<style lang="scss" scoped>
.navbar-cover {
    height: 75px;
    width: 100vw;
    padding: 1.5em;
    display: flex;
    align-items: center;
    background-color: #659DBD;
    backdrop-filter: blur(5px);
    position: fixed;

    .content {
        display: flex;
        gap: 15px;
        justify-content: space-between;
        width: 100vw;
        margin-left: 4em;
        margin-right: 4em;

        div {
            display: flex;
            gap: 20px;
        }
    }
}

.navlink {
    align-items: center;
    background-color: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: .25rem;
    box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
    box-sizing: border-box;
    color: rgba(0, 0, 0, 0.85);
    cursor: pointer;
    display: inline-flex;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 1.25;
    height: 2.5rem;
    padding: calc(.875rem - 1px) calc(1.5rem - 1px);
    text-decoration: none;
    transition: all 250ms;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: baseline;
    width: auto;
}

.navactive {
    color: green;
}

.navlink:hover {
    transform: translateY(-1px);
}

.navlink:focus {
    border-color: rgba(0, 0, 0, 0.15);
    box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    color: rgba(0, 0, 0, 0.65);
}

.navlink:active {
    background-color: #F0F0F1;
    border-color: rgba(0, 0, 0, 0.15);
    box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
    color: rgba(0, 0, 0, 0.65);
    transform: translateY(0);
}
</style>
