import CommonLayout from '@/Layouts/CommonLayout'
import React from 'react'
import TextInput from '@/Components/TextInput'
import { useState } from 'react'
import InputLabel from '@/Components/InputLabel'
export default function Settings({ auth, categories }) {
    const [phone, setPhone] = useState('')


    return (
        <CommonLayout pageTitle="Settings" categories={categories} auth={auth}>
            <div className="px-10 py-10">
                <div className='grid grid-cols-2 gap-3 px-28'>
                    <div>
                        <InputLabel forInput={'name'}>Name</InputLabel>
                        <TextInput name={'name'} id={'name'} value={auth.user.name}></TextInput>
                    </div>

                    <div>

                        <InputLabel forInput={'email'}>Email</InputLabel>
                        <TextInput name={'email'} id={'email'} value={auth.user.email}></TextInput>
                    </div>

                    <div>
                        <InputLabel forInput={'username'}>Username</InputLabel>
                        <TextInput name={'username'} id={"username"} value={auth.user.username}></TextInput>
                    </div>

                    <div>
                        <InputLabel forInput={'phone'}>Phone</InputLabel>
                        <TextInput name={'phone'} id={'phone'} handleChange={(e) => setPhone(e.target.value)} value={phone} placeholder="+880 164******"></TextInput>
                    </div>

                </div>
                <div className='flex gap-3 mt-5 px-28'>
                    <button className='btn btn-primary'>Update</button>
                    <button className='btn bg-transparent border-0 p-0 font-bold text-primary'>Close</button>
                </div>
            </div>
        </CommonLayout>
    )
}
