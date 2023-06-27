<script>
export default {
    data() {
        return {
            inputs: [0],
            output: [0]
        }
    },
    methods: {
        addField() {
            let newField = [
                ...this.inputs, 0
            ]
            this.inputs = newField
        }
    }

}
</script>

<template>
    <div class="cover">
        <div class="container">
            <span class="tittle">Input your numbers here!</span>
            <div class="cover-button">
                <button>Calculate</button>
                <button @click="addField">Add Field</button>
            </div>
            <div class="cover-input">
                <input v-for="(input, idx) in inputs" type="number" v-model="inputs[idx]" />
            </div>
            <div class="border"></div>
            <span class="tittle">Result of calculation of your input</span>
            <div class="cover-result">
                <div class="result">
                    <span>
                        787877
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.cover {
    width: 100vw;
    display: flex;
    justify-content: center;
    padding-top: 8em;

    .container {
        display: flex;
        flex-direction: column;
        width: 50vw;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border: solid 1px rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
        padding: 30px 20px;

        .tittle {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            margin-top: 20px;
        }

        .cover-button {
            display: flex;
            justify-content: space-around;
            width: 100%;

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
                font-size: 16px;
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
                width: 8em;
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

        .cover-input {
            input {
                border: none;
                height: 2.5em;
                transition: 0.2s;
                outline: 0;
                border-radius: 4px;
                padding: 10px;
            }


            input:focus {
                outline: solid 1.5px #4056a1;
            }
        }

        .cover-result {
            .result {
                border: none;
                height: 2em;
                border: solid 1px #4056a1;
                border-radius: 4px;
                padding: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #F0F0F1;
                font-size: 14px;
            }
        }

        .cover-input,
        .cover-result {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            font-size: 14px;

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=number] {
                -moz-appearance: textfield;
            }

            input {
                width: 5rem;
            }
        }
    }

}
</style>