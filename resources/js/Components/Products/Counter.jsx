import React from 'react'
export default function Counter({ onCounterClickHandler, count }) {
    return (<div className='flex col-span-2 gap-x-2'>
        <button onClick={onCounterClickHandler} id='minus-counter' className='btn btn-outline'>-</button>
        <input type="text" name='qty' disabled className='input w-12' value={count} />
        <button onClick={onCounterClickHandler} id='plus-counter' className='btn btn-outline'>+</button>
    </div>);
}