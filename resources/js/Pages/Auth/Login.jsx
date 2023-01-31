import { useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import { SocialMedia } from '@/Components';
import CommonLayout from '@/Layouts/CommonLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { usePage, Link, useForm } from '@inertiajs/inertia-react';
// import route from '/vendor/tightenco/ziggy/src/js';

export default function Login({ status, canResetPassword, auth }) {
    const { data, setData, post, processing, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });
    const { messages, errors } = usePage().props
    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);
    const onHandleChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <CommonLayout pageTitle='Login' auth={auth} messages={messages}>

            {status && <div className="mb-4 font-medium text-sm text-green-600">{status}</div>}

            <div className="flex justify-center mt-10 p-5">
                <div className="card max-w-5xl shadow-lg bg-base-300">
                    <div className="grid md:grid-cols-3 grid-cols-2 items-center justify-center">
                        <form onSubmit={submit} className='col-span-2 px-14 py-8'>
                            <h1 className='text-primary text-xl font-bold text-center mb-4'>Login using</h1>
                            <SocialMedia />
                            <div>
                                <InputLabel forInput="email" value="Email" />

                                <TextInput
                                    id="email"
                                    type="email"
                                    name="email"
                                    value={data.email}
                                    className="mt-1 block w-full"
                                    autoComplete="username"
                                    isFocused={true}
                                    handleChange={onHandleChange}
                                    placeholder='example@email.com'
                                />

                                <InputError message={errors.email} className="mt-2" />
                            </div>

                            <div className="mt-4">
                                <InputLabel forInput="password" value="Password" />

                                <TextInput
                                    id="password"
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    className="mt-1 block w-full"
                                    autoComplete="current-password"
                                    handleChange={onHandleChange}
                                    placeholder='Password'
                                />

                                <InputError message={errors.password} className="mt-2" />
                            </div>

                            <div className="block mt-4">
                                <label className="flex items-center">
                                    <Checkbox name="remember" value={data.remember} handleChange={onHandleChange} />
                                    <span className="ml-2 text-sm text-gray-600">Remember me</span>
                                </label>
                            </div>

                            <div className="flex items-center justify-between mt-4">
                                {canResetPassword && (
                                    <Link
                                        href={route('password.request')}
                                        className="link"
                                    >
                                        Forgot your password?
                                    </Link>
                                )}

                                {/* <Link className='btn btn-primary capitalize' href='/login' method="post" as="button" type="button">Login</Link> */}
                                <PrimaryButton className="ml-4" processing={processing}>
                                    Log in
                                </PrimaryButton>
                            </div>
                        </form>
                        <div className='hidden md:flex bg-slate-900 rounded-r-box h-full items-center'>
                            <img src="assets/login.png" alt="" className='' />
                        </div>
                    </div>

                </div>
            </div>

        </CommonLayout>
    );
}
