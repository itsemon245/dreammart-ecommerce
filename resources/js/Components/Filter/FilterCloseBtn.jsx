import React from 'react'
import { XCircleIcon } from '@heroicons/react/24/outline'

export default function FilterCloseBtn({closeFilterMenu}) {
    return (
        <button onClick={closeFilterMenu}>
            <XCircleIcon className='w-6 h-6 text-base-100' />
        </button>
    )
}
