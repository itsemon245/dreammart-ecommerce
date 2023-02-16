import React from 'react'
import { usePage } from '@inertiajs/inertia-react'
import toast, { Toaster } from 'react-hot-toast';
import { useEffect } from 'react';

export default function Alert({ type, message }) {
    const { success, error } = usePage().props
    console.log(success)
    const notify = () => {
        success.message ? toast.success(success.message) :
            error.message ? toast.error(error.message) : ''
    }
    useEffect(notify, [])
    return (
        <div>
            <Toaster
                position="top-center"
            />
        </div>
    )
}


