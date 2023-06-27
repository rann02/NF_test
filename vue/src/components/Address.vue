<script>
export default {
    data() {
        return {

        }
    },
    methods: {
        closeModal() {

        }
    }
}
</script>

<template>
    <div class="container-address">
        <div class="address">
            <div class="card">
                <div class="cover">
                    <img src="../assets/address.svg" />
                    <span class="bold">Nama alamat</span>
                </div>
                <span class="name">Nama penerima</span>
                <span class="content">Nomor HP</span>
                <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam officia repellendus
                    doloribus totam ut et
                    tempore harum unde mollitia cupiditate repudiandae tenetur quis.</p>
                <span class="bold">Kode Pos: 191918</span>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.container-address {
    display: none;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.8);

    .address {
        width: 40vw;
        background: #fff;
        padding: 15px 20px;
        border-radius: 4px;

        .card {
            display: flex;
            flex-direction: column;
            gap: 5px;
            width: 100%;
            border: solid 1px rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            padding: 20px;


            .cover {
                display: flex;
                align-items: center;
                gap: 5px;
            }

            .bold {
                font-weight: 600;
                font-size: 14px;
            }

            .name {
                font-weight: 700;
                font-size: 16px;
            }

            .content {
                font-size: 14px;
            }

            img {
                height: 12px;
            }

            p {
                line-height: calc(14px*1.5);
            }
        }
    }
}
</style>