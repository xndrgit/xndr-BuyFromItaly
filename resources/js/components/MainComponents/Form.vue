<template>
    <div id="form" class="col-12 d-flex justify-content-center">
        <div v-if="!isSent" class="form-container">
            <div class="form-box">
                <form @submit.prevent="submitForm">

                    <img key="logo" :src="getImg('logo.png')" alt="logo" class="logo col-6 mb-4"/>

                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input id="name" v-model="formData.name" required type="text"/>
                    </div>

                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input
                            id="email"
                            v-model="formData.email"
                            required
                            type="email"
                        />
                    </div>

                    <div class="form-group">
                        <label for="message">MESSAGE</label>
                        <textarea
                            id="message"
                            v-model="formData.message"
                            required
                            rows="4"
                        ></textarea>
                    </div>

                    <button :disabled="isSent" class="submit-button" type="submit">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <div v-if="isSent" class="sent-notification">
            <i class="fas fa-check-circle"></i>
            <p>EMAIL SENT!</p>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    mounted() {
    },
    watch: {
        '$route.params.product': {
            immediate: true, // Trigger the handler immediately on component mount
            handler(newData) {
                // Update formData.message when $route.params.yourData changes
                this.formData.message = newData || '';
            },
        },
    },

    name: "Form",
    components: {},
    props: {},


    data() {
        return {

            formData: {
                name: '',
                email: '',
                message: '',
            },
            isSent: false,
        };
    },
    methods: {
        placeholderText() {
            return this.$route.params.yourData || 'IL TUO MESSAGGIO';
        },
        getImg(name) {
            return `/img/${name}`;
        },
        submitForm() {
            this.isSent = true;
            setTimeout(() => {
                this.formData = {
                    name: '',
                    email: '',
                    message: '',
                };
                this.isSent = false;
            }, 1500);

            // Handle form submission logic here
            axios.post('api/contacts', {
                'name': this.formData.name,
                'email': this.formData.email,
                'message': this.formData.message,
            })
                .then((res) => {
                    console.log(res);
                })
                .catch((error) => {
                    console.warn(error.message);
                });
        }

    },
};
</script>

<style lang="scss" scoped>
.form-container {
    margin: 2rem auto;
    text-align: center;

    .form-box {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;

        .form-group {
            margin-bottom: 1.5rem;
            width: 100%;

            label {
                display: block;
                font-size: 0.8rem;
                margin-bottom: 0.3rem;
            }

            input,
            textarea {
                width: 50%;
                padding: 0.4rem;
                font-size: 0.5rem;
                border: 2px solid #ccc;
                box-sizing: border-box;
                text-align: center;
                text-transform: uppercase;
            }

            textarea {
                resize: vertical;
            }
        }

        .submit-button {
            background-color: black;
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            outline: none;

            &:hover {
                background-color: white;
                color: black;
            }

            &:disabled {
                background-color: #ccc;
                cursor: not-allowed;
            }
        }
    }
}

.sent-notification {
    color: #2ecc71;
    font-size: 1.2rem;
    margin-bottom: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: scaleInAndOut 2s ease;

    @keyframes scaleInAndOut {
        0%,
        100% {
            opacity: 0;
            transform: scale(0);
        }
        50% {
            opacity: 1;
            transform: scale(1.2);
        }
    }

    p {
        margin: 0 5px;
    }
}
</style>
