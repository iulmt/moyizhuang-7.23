export const Validator = (data) => {
    return {
        remark: [
            {
                required: true,
                trigger: 'blur',
                message: '备注必须填写'
            }
        ]
    }
};