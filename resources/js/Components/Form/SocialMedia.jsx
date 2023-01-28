import React from 'react'
import { Link } from '@inertiajs/inertia-react';
import { BsGoogle, BsFacebook, BsTwitter } from 'react-icons/bs'

export default function SocialMedia({}) {
    return (
        <div>
            <div className='flex gap-6 justify-center my-4'>
                <Link><BsGoogle className='w-6 h-6 hover:text-primary hover:scale-110 transition-all' /></Link>
                <Link><BsFacebook className='w-6 h-6 hover:text-primary hover:scale-110 transition-all' /></Link>
                <Link><BsTwitter className='w-6 h-6 hover:text-primary hover:scale-110 transition-all' /></Link>
            </div>
            <div className="divider px-28 max-mini-tab:px-5">OR</div>
        </div>
    )
}
