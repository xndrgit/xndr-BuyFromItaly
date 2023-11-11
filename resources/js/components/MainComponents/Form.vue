<template>
    <div class="col-12">
        <div v-if="!isSent" class="form-container col-10 col-md-4">
            <form @submit.prevent="submitForm">

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
    watch: {},

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

    form {
        display: flex;
        flex-direction: column;
        align-items: center;

        .form-group {
            margin-bottom: 1.5rem;
            width: 100%;

            label {
                display: block;
                font-size: 1rem;
                margin-bottom: 0.5rem;
            }

            input,
            textarea {
                width: 100%;
                padding: 0.5rem;
                font-size: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                text-align: center; // Center-align text in input fields
                text-transform: lowercase; // Convert text to lowercase
            }

            textarea {
                resize: vertical;
            }
        }

        .submit-button {
            background-color: #3498db;
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            outline: none; // Remove default button focus outline

            &:hover {
                background-color: #2980b9;
            }

            &:disabled {
                background-color: #ccc;
                cursor: not-allowed;
            }
        }
    }
}

.sent-notification {
    color: #2ecc71; // Green color for success
    font-size: 1.2rem;
    margin-bottom: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: scaleInAndOut 2s ease; // Customize animation duration

    @keyframes scaleInAndOut {
        0%, 100% {
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
