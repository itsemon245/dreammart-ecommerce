import React from 'react'

export default function Login() {
    return (
        <div>
            <form action="" className='flex-col'>
                <div>
                    <label htmlFor="username">Enter username</label>
                    <input type="text" name="username" id="username" placeholder='johndoe23' />
                </div>
                <div>
                    <label htmlFor="password">Enter password</label>
                    <input type="password" name="password" id="password" placeholder='Password' />
                </div>
            </form>
        </div>
    )
}
