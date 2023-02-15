import React from 'react'
import { usePage } from '@inertiajs/inertia-react'
import toast, { Toaster } from 'react-hot-toast';
import { useEffect } from 'react';

export function Alert({ type, message }) {
    const notify = () => {
        type === 'success' ? toast.success(message) :
            type === "error" ? toast.error(message) : ''
    }
    useEffect(notify, [])
    return (
        <div>
            <Toaster
                position="bottom-center"
                 />
        </div>
    )
}

export default function Alerts(props) {
    const { success, error } = usePage().props
    const messages = { success, error }

    return (
        <>
            {Object.entries(messages).map(([type, value]) => (
                value.message && <Alert type={type} message={value.message} key={Math.random() * (100 - 10) + 10} />
            ))}
        </>
    )

}

