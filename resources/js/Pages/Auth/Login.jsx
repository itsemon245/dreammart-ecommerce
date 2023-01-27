import { useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import CommonLayout from '@/Layouts/CommonLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm } from '@inertiajs/react';
import { usePage } from '@inertiajs/inertia-react';
// import route from '/vendor/tightenco/ziggy/src/js';

export default function Login({ status, canResetPassword, auth }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });
    const { messages } = usePage().props
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

            <div className="flex justify-center mt-10">
                <form onSubmit={submit}>
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
                        />

                        <InputError message={errors.password} className="mt-2" />
                    </div>

                    <div className="block mt-4">
                        <label className="flex items-center">
                            <Checkbox name="remember" value={data.remember} handleChange={onHandleChange} />
                            <span className="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div className="flex items-center justify-end mt-4">
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
            </div>
        </CommonLayout>
    );
}
