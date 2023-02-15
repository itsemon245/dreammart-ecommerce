import React from 'react'

export default function Rating({ }) {
    return (
        <div>
            <div className="rating">
                <div className="w-3 h-3 mask mask-star-2 bg-yellow-400"></div>
                <div className="w-3 h-3 mask mask-star-2 bg-yellow-400"></div>
                <div className="w-3 h-3 mask mask-star-2 bg-yellow-400"></div>
                <div className="w-3 h-3 mask mask-star-2 bg-yellow-400"></div>
                <div className="w-3 h-3 mask mask-star-2 bg-yellow-400"></div>
            </div>
            <span className='text-xs'>(8)</span>
        </div>
    );
}
