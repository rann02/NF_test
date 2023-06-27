<script>
import ListCustomer from '../components/ListCustomer.vue';
import Address from '../components/Address.vue';
export default {
    components: {
        ListCustomer, Address
    },
    data() {
        return {
        }
    },
    methods: {

    }

}
</script>

<template>
    <div class="cover-home">
        <form class="search-side">
            <div class="cover-input">
                <img class="icon" src="../assets/search.svg" />
                <input placeholder="Name" type="text" />
            </div>
            <div class="cover-input">
                <img class="icon" src="../assets/search.svg" />
                <input placeholder="Email" type="text" />
            </div>
            <div class="cover-input">
                <img class="icon" src="../assets/search.svg" />
                <input placeholder="No. HP" type="text" />
            </div>
            <div class="cover-input">
                <img class="icon" src="../assets/search.svg" />
                <input placeholder="Gender" type="text" />
            </div>
            <div class="cover-input">
                <img class="icon" src="../assets/search.svg" />
                <input type="date" />
            </div>
            <button>Search</button>
        </form>
        <div class="container-order">
            <h2>Customers List</h2>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">No.</div>
                    <div class="col col-2">Photo</div>
                    <div class="col col-3">Name</div>
                    <div class="col col-4">Email</div>
                    <div class="col col-5">No.HP</div>
                    <div class="col col-6">Gender</div>
                    <div class="col col-7">Tanggal Lahir</div>
                    <div class="col col-8">Action</div>
                </li>
                <ListCustomer />
            </ul>
        </div>
        <Address />
    </div>
</template>

<style lang="scss" scoped>
.cover-home {
    display: flex;

    .search-side {
        flex-basis: 18%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        margin-top: 80px;
        border: solid 1px rgba(0, 0, 0, 0.15);
        margin-left: 30px;
        padding-top: 40px;
        padding-bottom: 30px;
        margin-right: 20px;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;

        .cover-input {
            display: flex;
            justify-content: center;
            align-self: center;
            border: solid 1px rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            position: relative;

            input {
                width: 15em;
                border: none;
                height: 2em;
                padding-left: 32px;
                transition: 0.2s;
                outline: 0;
                border-radius: 4px;
            }


            input:focus {
                outline: solid 1px #4056a1;
            }

            .icon {
                position: absolute;
                left: 8px;
                top: 20%;
            }

        }

        button {
            align-items: center;
            background-color: #659DBD;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            color: rgba(0, 0, 0, 0.85);
            cursor: pointer;
            display: inline-flex;
            font-size: 14px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            height: 2rem;
            padding: calc(.875rem - 1px) calc(1.5rem - 1px);
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: 15em;
        }


        button:hover {
            transform: translateY(-1px);
        }

        button:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }

        button:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }
    }

}
</style>