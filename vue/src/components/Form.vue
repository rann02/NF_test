<script>
export default {
    data() {
        return {
            addresses: []
        }
    },
    methods: {
        addNewForm() {
            const newState = [
                ...this.addresses,
                {
                    penerima: '',
                    alamat: '',
                    detail_alamat: '',
                    no_hp: '',
                    kode_pos: ''
                }
            ]
            console.log(newState);
            this.addresses = newState
        },
        deleteNewForm(id) {
            console.log(id);
            let newForm = this.addresses.filter((el, idx) => idx !== id)
            this.addresses = newForm
        }
    }
}
</script>

<template>
    <form class="container">
        <input type="text" placeholder="Name" />
        <input type="file" placeholder="Image" />
        <input type="email" placeholder="Email" />
        <input type="text" placeholder="No. HP" />
        <input type="text" placeholder="Gender" />
        <label for="date">
            Date of Birth
        </label>
        <input id="date" type="date" />
        <div class="new-form">
            <p>
                Address
            </p>
            <button type="button" @click="addNewForm">Add form</button>
        </div>
        <div class="container-address" v-for="(address, idx ) in addresses" :key="idx">
            <input v-model="addresses[idx].penerima" type="text" placeholder="Penerima" />
            <input v-model="addresses[idx].alamat" type="text" placeholder="Alamat" />
            <input v-model="addresses[idx].detail_alamat" type="text" placeholder="Detail Alamat" />
            <input v-model="addresses[idx].no_hp" type="text" placeholder="No. HP" />
            <input v-model="addresses[idx].kode_pos" kode_postype="text" placeholder="Kode Pos" />
            <button class="delete" type="button" @click="() => { deleteNewForm(idx) }">Delete</button>
        </div>
        <button class="submit">SUBMIT</button>
    </form>
</template>

<style lang="scss" scoped>
.container {
    display: flex;
    flex-direction: column;
    width: 40vw;
    gap: 7px;
    padding: 40px;

    input {
        width: 100%;
        border: none;
        height: 3em;
        transition: 0.2s;
        outline: 0;
        border-radius: 4px;
        padding: 10px;
    }


    input:focus {
        outline: solid 1.5px #4056a1;
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

    .new-form {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
    }

    .submit {
        width: 100%;
    }

    .container-address {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 7px;
    }

    .delete {
        align-self: self-end;
    }
}
</style>