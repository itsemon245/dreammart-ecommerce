import React from 'react'
import { BellIcon } from '@heroicons/react/24/outline'
import ProfileMenu from './ProfileMenu'

export default function NavAuthOption() {
    return (
        <>
            <BellIcon className='w-6 h-6 text-white'></BellIcon>
            <ProfileMenu></ProfileMenu>
        </>
    )
}
