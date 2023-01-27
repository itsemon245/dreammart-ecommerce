import React from 'react'
import { XCircleIcon } from '@heroicons/react/24/outline'

export default function FilterCloseBtn({closeFilterMenuToggler}) {
    return (
        <button onClick={closeFilterMenuToggler}>
            <XCircleIcon className='w-6 h-6 text-base-100' />
        </button>
    )
}
