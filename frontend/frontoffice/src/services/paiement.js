import api from "./api";

export async function createCheckoutSession(payload, token, context) {
  const res = await api.post(
    `/paiements/checkout-session?context=${context}`,
    payload,
    { headers: { Authorization: `Bearer ${token}` } }
  );
  return res.data;
}