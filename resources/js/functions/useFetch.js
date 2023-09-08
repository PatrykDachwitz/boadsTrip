import { ref, toValue, watchEffect } from "vue";

export function useFetch(url) {
    const date = ref(null)
    const error = ref(null)

    watchEffect(() => {
       date.value = null;
       error.value = null;

       fetch(toValue(url))
           .then((res) => res.json())
           .then((json) => (date.value = json))
           .catch((err) => (error.value = error))
    });

    return { date, error }
}
