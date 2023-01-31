import React from 'react'
import { usePage } from '@inertiajs/inertia-react'
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import { useEffect } from 'react';

export function Alert({ type, message }) {
    const notify = () => {
        type === 'success' ? toast.success(message) :
            type === 'info' ? toast.info(message) :
                type === 'warning' ? toast.warning(message) :
                    type === "error" ? toast.error(message) : ''
    }
    useEffect(notify, [])
    return (
        <div>
            <ToastContainer
            theme='dark'
            autoClose={3000} />
        </div>
    )
}

export default function Alerts(props) {
    const { success, info, warning, error } = usePage().props
    const messages = { success, info, warning, error }

    return (
        <>
            {Object.entries(messages).map(([type, value]) => (
                value.message && <Alert type={type} message={value.message} key={Math.random() * (100 - 10) + 10} />
            ))}
        </>
    )

}

