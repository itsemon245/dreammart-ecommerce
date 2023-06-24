export default function Checkbox({ name, value, handleChange }) {
    return (
        <input
            type="checkbox"
            name={name}
            value={value}
            className="checkbox checkbox-primary rounded-md checkbox-sm bg-slate-700"
            onChange={(e) => handleChange(e)}
        />
    );
}
