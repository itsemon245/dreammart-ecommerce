import React from 'react'
import { FunnelIcon } from '@heroicons/react/24/outline'

export default function FilterBtn({ onClickHandler }) {
    return (
        <button onClick={onClickHandler} className='btn m-2 btn-primary max-md:btn-sm text-base-100 capitalize'>
            Filter <FunnelIcon className='w-6 h-6  max-md:w-5 max-md:h-5 text-base-100'></FunnelIcon>
        </button>
    )
}
