import React from 'react'
export default function Counter({ onCounterClickHandler, count }) {
    return (<div className='flex'>
        <button onClick={onCounterClickHandler} id='minus-counter' className='btn btn-outline border-r-0 rounded-r-none'>-</button>
        <div className='bg-slate-900 border-t border-b w-12 rounded-none flex justify-center items-center cursor-not-allowed'>
            <span>{count}</span>
        </div>
        <button onClick={onCounterClickHandler} id='plus-counter' className='btn btn-outline border-l-0 rounded-l-none'>+</button>
    </div>);
}